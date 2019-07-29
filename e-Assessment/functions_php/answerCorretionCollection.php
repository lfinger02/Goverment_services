<?php

class answerCorrection
{
	public function ft_grade_user($user_answer, $our_answer, $max_marks) {

        $user_answers = str_word_count(strtoupper($user_answer), 1);
        $keywords = str_word_count(strtoupper($our_answer), 1);

        
        $user_answer_len = sizeof($user_answers);
        $our_answer_len = sizeof($keywords);
        
        $marks_counter = 0;
        
        if ($user_answer_len < 1 || !$user_answer_len)
            return (0);
        
        while ($our_answer_len > 0){
            $user_answer_len = str_word_count($user_answer);
            while ($user_answer_len > 0){
                if ($user_answers[$user_answer_len - 1] == "THE" || $user_answers[$user_answer_len - 1] == "WHICH" || $user_answers[$user_answer_len - 1] == "IS" || $user_answers[$user_answer_len - 1] == "BECAUSE" || $user_answers[$user_answer_len - 1] == "WHILE" || $user_answers[$user_answer_len - 1] == "AND" || $user_answers[$user_answer_len - 1] == "WHEN" || $user_answers[$user_answer_len - 1] == "TO" || $user_answers[$user_answer_len - 1] == "OR" || $user_answers[$user_answer_len - 1] == "THE" || $user_answers[$user_answer_len - 1] == "THIS" || $user_answers[$user_answer_len - 1] == "NOT" || $user_answers[$user_answer_len - 1] == "FROM" || $user_answers[$user_answer_len - 1] == "OF" || $user_answers[$user_answer_len - 1] == "AS" || $user_answers[$user_answer_len - 1] == "WILL" || $user_answers[$user_answer_len - 1] == "IT" || $user_answers[$user_answer_len - 1] == "AN" || $user_answers[$user_answer_len - 1] == "IN" || $user_answers[$user_answer_len - 1] == "A")
                {

                }
                else
                if ($keywords[$our_answer_len - 1] == $user_answers[$user_answer_len - 1]){
                    $marks_counter+=2;  
                }
                $user_answer_len--;
            }
            $our_answer_len--;
        }
        if ($marks_counter > $max_marks)
        return $max_marks;
        else
            return $marks_counter;
    	}
	}

?>