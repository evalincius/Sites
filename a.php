<html>
  <body>
 
  <?php
  $q = $_REQUEST["q"];
  $a = '"'.$q.'"';
  /* ARC2 static class inclusion */ 
  include_once('semsol/ARC2.php');  
 
  $dbpconfig = array(
  "remote_store_endpoint" => "http://www.linkedmdb.org/sparql",
   );
 
  $store = ARC2::getRemoteStore($dbpconfig); 
 
  if ($errs = $store->getErrors()) {
     echo "<h1>getRemoteSotre error<h1>" ;
  }
 
  $query = "
    PREFIX mdb: <http://data.linkedmdb.org/resource/movie/film>
    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
    PREFIX dc: <http://purl.org/dc/terms/>

    SELECT ?label?resource WHERE {
      ?resource mdb:id ?uri .
      ?resource dc:title ?label . 
      FILTER regex(?label," .$a. ")}";
  
  /* execute the query */
  $rows = $store->query($query, 'rows'); 
 
    if ($errs = $store->getErrors()) {
       echo "Query errors" ;
       print_r($errs);
    }
 
    /* display the results in an HTML table */
    echo "<table border='4'>
    <thead>
        <th>#</th>
        <th>Title</th>
    </thead>";

    /* loop for each returned row */
    foreach( $rows as $row ) { 
	$var = '"'.$row['resource'].'"';
    print "<tr>
	<td>".++$id. "</td>
	<td> <a href='javascript:void(0);' onclick='functionSendLabel(" .$var. ")' value='Show alert box' >" . $row['label']."</a>
	</td>"  
    ;
    }
    echo "</table>" 

  ?>
  
  </body>
</html>