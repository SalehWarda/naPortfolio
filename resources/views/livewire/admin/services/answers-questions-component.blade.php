<div>
    <div class="row">



            @forelse($service->questions as $question)

                <div wire:ignore class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="faq__item-wrapper pl-100">
                        <div class="faq__accordion">
                            <div class="accordion" id="faqaccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq{{$loop->iteration}}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse{{$loop->iteration}}">
                                            {{$question->question}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$loop->iteration}}" class="accordion-collapse collapse " aria-labelledby="faq{{$loop->iteration}}" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <div class="row">

                                                @if($question->sort == 'input')

                                                    <div  class="col-xxl-12">
                                                        <div class="contact__form-input">
                                                            <input name="answer"  wire:model="answer" placeholder="Enter Your Answer">
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="col-xxl-12">
                                                        <div class="contact__form-input">
                                                            <input type="file" name="answer" wire:model="answer" class="form-control" id="customFile" placeholder="Enter Your file">
                                                        </div>
                                                    </div>

                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @error('answer')
            <span class="text-danger">{{$message}}</span>
            @enderror


            @empty
            @endforelse
            <div class="text-center">
                <button class="btn ripple btn-secondary m-lg-2" wire:click="sentAnswers" type="submit">
                    إرسال البيانات<i
                        class="fe fe-plus"></i></button>
            </div>

    </div>
</div>
