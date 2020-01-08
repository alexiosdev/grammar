<?php 
$arrayData = array("auxiliary_verbs","mixed_comparisons","conjunctions","conditional_sentences","gerunds","infinitives","modal_verbs","imperative","interrogative_pronouns","relative_pronoun","mood","must_have_to","narration","nouns","participle_phrases","passive_voice","phrasal_verbs","quantifier","adjectives_as_nouns","relative_clauses","reported_speech","sentence_patterns","subject_and_verb_agreement","mixed_subjunctive","question_tag","measures","regular_and_irregular_verbs","verbal","verbs");
foreach ($arrayData as $value) {
	mkdir($value); 
}

?>