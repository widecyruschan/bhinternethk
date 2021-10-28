<?php if(!defined('s7V9pz')) {die();}?>
<?php
function cnf($v = "cnf") {
    $cnf["cnf"] = array(
        "mode" => 1,
        "name" => "Grupo - Baevox Framework",
        "tag" => "Something Beyond Limits",
        "poet" => "Baevox",
        "url" => "https://bh.internethk.com/chatroomadmin/",
        "region" => "Asia/Kolkata",
        "knob" => "knob",
        "door" => "door",
        "gem" => "gem",
        "bit" => "s7V9pz",
        "chief" => "admin",
        "codeword" => "pass",
        "samesite" => "Strict",
        "ext" => "xml",
        "global" => "1",
        "appversion" => 1,
    );
$cnf["Grupo"] = array(
                'host' => '127.0.0.1',
                'db' => 'bhintern_chatroom',
                'user' => 'bhintern_user',
                'pass' => 'EB6+uFPRSbS4',
                'prefix' => 'gr_'
                );
if ($v == "all") {
return $cnf;
} 
else if (isset($cnf[$v])) {
return $cnf[$v];
}
}
?>

