<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Section extends Component
{
    public $leftImg;
    public $rightImg;
    public $title;
    public $titleWords = array();
    public $paragraphs;
    public function render()
    {
        $words = explode(" ", $this->title);
        $wordsLength = count($words);
        $threeWords = "";
        foreach ($words as $key => $word) {
            if ($wordsLength - 1 > $key) {
                $threeWords .= $word . " ";
                if (str_word_count($threeWords) + 1 > 3) {
                    array_push($this->titleWords, $threeWords);
                    $threeWords = "";
                }
            } else {
                array_push($this->titleWords, $threeWords);
                array_push($this->titleWords, $word);
            }
        }
        return view('livewire.components.section');
    }
}