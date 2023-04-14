<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Section extends Component
{
    public $leftImg;
    public $rightImg;
    public $title;
    public $paragraphs;
    public function render()
    {
        $words = explode(" ", $this->title);
        $wordsLength = count($words);
        $threeWords = "";
        foreach ($words as $key => $word) {
            if ($wordsLength > $key) {
                if (strlen($threeWords) < 3) {
                    $threeWords .= $word . " ";
                    break;
                } else {
                    $this->title .= $threeWords;
                }
            } else {
                $this->title .= $word;
            }
            dd("this is some serious error");
        }
        return view('livewire.components.section');
    }
}