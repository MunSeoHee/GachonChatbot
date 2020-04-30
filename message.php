<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $userkey = $data["user_key"];
    $content = $data["content"];

    switch($content)
    {
        case "정치":
            echo <<<EOD
            {
                "message":
                {
                    "text": "당신의 이수 학점은 $total_point 입니다."
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["학점", "공지", "학사일정", "교육과정", "학과등록"]
                }
            }
EOD;
            
            break;
      
                
    }

    
?>