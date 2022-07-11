<?php

namespace App\Http\Livewire\Admin\Services;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AnswersQuestionsComponent extends Component
{
    use LivewireAlert;


    public $service;
    public $answer=[] ;
    public $question_id;


    public function resetData()
    {
        $this->answer = null;


    }
    public function rules()
    {
        return [
            'answer' => ['required'],


        ]   ;
    }

    public function modalData()
    {

        $input['answer'] = $this->answer;
        $input['services_questions_id'] = $this->service->questions()->id;


     dd($input);
        \App\Models\Backend\Answer::create($input);
    }
    public function sentAnswers()
    {

//        $this->validate();
        $this->modalData();
        $this->resetData();

        $this->alert('success','تم إضافة الإجابات بنجاح !');
    }
    public function render()
    {
        return view('livewire.admin.services.answers-questions-component');
    }
}
