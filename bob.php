<?php
/*
Bob is a lackadaisical teenager. In conversation, his responses are very limited.

Bob answers 'Sure.' if you ask him a question.

He answers 'Whoa, chill out!' if you yell at him.

He answers 'Calm down, I know what I'm doing!' if you yell a question at him.

He says 'Fine. Be that way!' if you address him without actually saying
anything.

He answers 'Whatever.' to anything else.
*/

// Create Bob the guy who answers to anything
class Bob {
    // Function that handles what Bob responds with according to what the input is
    public function respondTo($input) {
        if($this->isInputEmpty($input)) {
            return 'Fine. Be that way!';
        } elseif ($this->askingQuestion($input)) {
            return 'Sure.';
        } elseif ($this->yellingAtBob($input)) {
            return 'Whoa, chill out!';
        } elseif ($this->yellingQuestion($input)) {
            return 'Calm down, I know what I\'m doing!';
        } else {
            return 
            'Whatever.';
        }
    }

    // Checks if the input is empty
    public function isInputEmpty($input) {
        if(trim($input) !== '') {
            return false;
        }
        return true;
    }

    // Checks if the input is a question by checking if there as a ? at end of input
    public function askingQuestion($input) {
        // Trims the input and get the last character using negative string offsets
        if((trim($input))[-1] == '?') {
            return true;
        }
        return false;
    }

    // Checks if yelling by checking if there is a ! at end of sentence
    public function yellingAtBob($input) {
        // Trims the input and gets the last character using negative string offsets
        if((trim($input))[-1] == '!') {
            return true;
        }
        return false;
    }

    /* TODO: Add yellingQuestion function by checking if last two characters in input are ?! or !? */
}
?>