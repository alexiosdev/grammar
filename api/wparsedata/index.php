<?php 
// $arrayData = array("have_has_had","adjectives","adverbs","adjectives_and_adverbs","am_is_are","were_was","there_is_there_are","do_does_did_done","auxiliary_verbs","mixed_comparisons","conjunctions","conditional_sentences","gerunds","infinitives","modal_verbs","imperative","interrogative_pronouns","relative_pronoun","mood","must_have_to","narration","nouns","participle_phrases","passive_voice","phrasal_verbs","quantifier","adjectives_as_nouns","relative_clauses","reported_speech","sentence_patterns","subject_and_verb_agreement","mixed_subjunctive","question_tag","measures","regular_and_irregular_verbs","verbal","verbs");
// foreach ($arrayData as $value) {
// 	mkdir($value); 
// }


$categoryName = "future_perfect";
$data = file_get_contents ("./test.json");
        $json = json_decode($data, true);
        // var_dump($json["articles5"]);
if( is_dir($categoryName) === false )
{
    mkdir($categoryName);
}

foreach ($json as $key => $value) {

	$arrayName = array('data' => $value);

	$fileName = $categoryName. "/".$key.".txt";
	$fp = fopen($fileName, 'w');

	fwrite($fp, json_encode($arrayName));

	fclose($fp);

}
// $arrayName = array('data' => $json["articles5"]);

// $results = print_r($json, true);
// $fp = fopen('./data.txt', 'w');

// fwrite($fp, json_encode($arrayName));

// fclose($fp);



?>
