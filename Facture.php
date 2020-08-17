<?php
include('Connexion.php')
$id=$_REQUEST["icode"]; $MontantTotal=$_REQUEST["montant"];$action=$_REQUEST["action"];
function fetch_data(){
    $Montant=0; $id=$_REQUEST["icode"]; $output = '';
    $sql = "SELECT * FROM orders where order_no = '$id'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){ 
       extract($row);
       $Montant= ($prix * $quantite);
       $output .= '<tr style="text-align:center;">
                 <td>'.$row["code"].'</td> <td>'.$row["nomP"].'</td><td>'.$row["prix"].' $</td><td>'.$row["quantite"].'</td><td>'. $Montant.' $</td></tr> ';
    } 
return $output; 
}


$sql = "SELECT * from client INNER join  orders where order_no='$id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
          extract($row);
          include('library/tcpdf.php');
          $pdf= new TCPDF('P','mm','A4');
          $pdf->SetMargins(PDF_MARGIN_LEFT, '20', PDF_MARGIN_RIGHT);
          $pdf->setPrintHeader(false);$pdf->setPrintFooter(false);
          $pdf->AddPage();
          $pdf->SetFont('Helvetica','',14);
          $pdf->WriteHTML("<h1 style=\"text-align:center;\">SAMI STORE </h1> <h2 style=\"text-align:center; color:green\">Facture de commande</h2>");
          $pdf->WriteHTML("<br><h4>Numero commande : ".$id."</h4>");
          $pdf->WriteHTML("<h4>Nom client : ".$row["nom_client"]."</h4>");
          $pdf->WriteHTML("<h4>Date de la commande : ".$row["cmd_date"]."</h4>");
          $content = '  <h1></h1> <table border="1" cellspacing="0" cellpadding="3">
                        <tr style="font-weight:bold; text-align:center; color:blue;">
                        <th >Code Produit</th><th >Article</th><th >Prix </th><th> Quantite </th> <th> Montant a payer </th></tr>';
          $content .= fetch_data(); $content .= '</table>';
          $pdf->writeHTML($content);
          $pdf->WriteHTML("<br><h4 style=\"color:green;\">Montant totale a payer : ".$MontantTotal." $</h4>");
          $pdf->output("Facture '$id'.pdf",$action);
          }
?>
