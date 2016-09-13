<?php

    $csv= "Type of service|Bank|IBAN|Nr. of envelopes|Nr. of parcels|Weight|Payment of shipment|Reimbursement(money)|Reimbursement transport payment|Declared Value|Contact person|Observations|Contains|Recipient name|Contact person|Phone|Fax|Email|County|Town|Street|Number|Postal Code|Block(building)|Entrance|Floor|Flat|Height of packet|Width of packet|Length of packet|Refund|Cost Center|Options|Packing|Personal data
    {$service}|||{$envelopes}|{$parcels}|{$weight}|{$payment}|{$reimbursement}|{$reimbursement_payment}|{$declared_value}|{$contactperson}|{$observations}|{$content}|{$recipient}|{$contact_person}|{$phone}|{$fax}|{$email}|{$county}|{$town}|{$street}|{$street_no}|{$zip_code}|{$block}|{$entrance}|{$floor}|{$flat}|{$height}|{$width}|{$length}|{$refund}|{$cost_center}|{$options}|{$packing}|{$personal_data}";

    $destination = "https://www.selfawb.ro/import_awb_integrat.php";
    $data = '';
    $mime_boundary=md5(time());
    $data .= '--' . $mime_boundary . "\n";
    $data .= 'Content-Disposition: form-data; name="username"' . "\n" . "\n";
    $data .= $username . "\n";
    $data .= '--' . $mime_boundary . "\n";
    $data .= 'Content-Disposition: form-data; name="client_id"' . "\n" . "\n";
    $data .= $client_id . "\n";
    $data .= '--' . $mime_boundary . "\n";
    $data .= 'Content-Disposition: form-data; name="user_pass"' . "\n" . "\n";
    $data .= $user_pass . "\n";
    $data .= '--' . $mime_boundary . "\n";
    $data .= 'Content-Disposition: form-data; name="fisier"; filename="magento'.time().'.csv"' . "\n";
    $data .= 'Content-Type: text/plain' . "\n". "\n";
    $data .= $csv . "\n";
    $data .= "--" . $mime_boundary . "--" . "\n" . "\n"; // finish with two eol's!!
    $params = array('http' => array(
                      'method' => 'POST',
                      'header' => 'Content-Type: multipart/form-data; boundary=' . $mime_boundary . "\n",
                      'content' => $data
               ));
    $ctx = stream_context_create($params);
    if($ctx)
    {
            $response = @file_get_contents($destination, FILE_TEXT, $ctx);
            if ($response)
            {
                    $result_fields=explode(',',$response);
            }
    }

?>
