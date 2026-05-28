<?php

class utilService {
    public function logErr(?string $fName ,?string $eMessage, ?int $code, ?string $status, ?string $message){
        if($eMessage){
            error_log($fName.' error: ' . $eMessage);
        }
        if($code){
            http_response_code($code);
        }
        if($status && $message){
            echo json_encode(['status' => $status, 'message' => $message]);
        }
        return;
    }
}
?>