<?php
$data = [
    [
        "internal_history_id" => "2230893",
        "external_id" => "8615",
        "external_commission" => "0.0005"
    ],
    [
        "internal_history_id" => "2230891",
        "external_id" => "2159",
        "external_commission" => "0.0200"
    ],
    [
        "internal_history_id" => "2230892",
        "external_id" => "5349",
        "external_commission" => "0.0060"
    ],
    [
        "internal_history_id" => "563089",
        "external_id" => "8659",
        "external_commission" => "0.0054"
    ],
    [
        "internal_history_id" => "217403",
        "external_id" => "1462",
        "external_commission" => "0.0040"
    ],
    [
        "internal_history_id" => "2230883",
        "external_id" => "8859",
        "external_commission" => "0.0008"
    ],
    [
        "internal_history_id" => "2230581",
        "external_id" => "5988",
        "external_commission" => "0.0040"
    ],
    [
        "internal_history_id" => "2230592",
        "external_id" => "8659",
        "external_commission" => "0.9000"
    ],
    [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ],
    [
        "internal_history_id" => "217467",
        "external_id" => "7612",
        "external_commission" => "0.0090"
    ],
    [
        "internal_history_id" => "2308935",
        "external_id" => "6923",
        "external_commission" => "0.0080"
    ]
];

function printData(array $data) {
    $delimeter = "+-" . str_repeat("-", strlen("Internal History ID")) . "-|-" . str_repeat("-", strlen("External ID")) . "-|-". str_repeat("-", strlen("External Commision")) . "-+\n" ;
    print($delimeter);
    print("| Internal History ID | External ID | External Commision |\n");
    print($delimeter);
    foreach($data as $row) {
        print("| " 
        . $row["internal_history_id"] . str_repeat(" ", strlen("Internal History ID") - strlen($row["internal_history_id"]))
        . " | " . $row["external_id"] . str_repeat(" ", strlen("External ID") - strlen($row["external_id"]))
        . " | " . $row["external_commission"] . str_repeat(" ", strlen("External Commision") - strlen($row["external_commission"])) . " |\n");
    }
    print($delimeter);
}

printData($data);
?>