<?php
function invoicepdf($data, $name) {
    if (count($name) > 1) {
		$name = "Orders";
	}else{
		$name = 'Order_'.$name[0]['order_id'];
	}
        
    pdf($data,$name);
}

function pdf($data, $name) {
   
        
    $pdf = new DOMPDF;
    $pdf->load_html($data);
    $pdf->render();
    $pdf->stream($name.".pdf");
}

?>