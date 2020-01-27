@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="container-fluid sectionFAQ">
    <div class="container py-3">
      <div class="row">
        <div class="col-10 mx-auto">
          <div class="accordion" id="faqExample">
            
            <!--Accordion 1-->
            <div class="card">
              <div class="card-header p-2" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Question: How does this work?
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                <div class="card-body">
                  <b>Answer:</b> It works using the Bootstrap 4 collapse component with cards to make a vertical accordion that expands and collapses as questions are toggled.
                </div>
              </div>
            </div>
            <!--Accordion 1 End-->

            <!--Accordion 2-->
            <div class="card">
              <div class="card-header p-2" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Question: What is Bootstrap 4?
                  </button>
                </h5>
              </div>

              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                <div class="card-body">
                  Bootstrap is the most popular CSS framework in the world. The latest version released in 2018 is Bootstrap 4. Bootstrap can be used to quickly build responsive websites.
                </div>
              </div>
            </div>
            <!--Accordion 2 End-->

            <!--Accordion 3-->
            <div class="card">
              <div class="card-header p-2" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Question: What is another question?
                  </button>
                </h5>
              </div>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                <div class="card-body">
                    The answer to the question can go here.
                </div>
              </div>
            </div>
            <!--Accordion 3 End-->

            <!--Accordion 4-->
            <div class="card">
              <div class="card-header p-2" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Question: What is the next question?
                  </button>
                </h5>
              </div>

              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                <div class="card-body">
                  The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                </div>
              </div>
            </div> 
            <!--Accordion 4 End-->

            <!--Accordion 5-->
            <div class="card">
              <div class="card-header p-2" id="headingFive">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Question: What is the next question?
                  </button>
                </h5>
              </div>

              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
                <div class="card-body">
                  The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                </div>
              </div>
            </div>
            <!--Accordion 5 End-->

            <!--Accordion 6-->
            <div class="card">
              <div class="card-header p-2" id="headingSix">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Question: What is the next question?
                  </button>
                </h5>
              </div>

              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqExample">
                <div class="card-body">
                  The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                </div>
              </div>
            </div>
            <!--Accordion 6 End-->

            <!--Accordion 7-->
            <div class="card">
              <div class="card-header p-2" id="headingSeven">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Question: What is the next question?
                  </button>
                </h5>
              </div>

              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faqExample">
                <div class="card-body">
                  The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                </div>
              </div>
            </div>
            <!--Accordion 7 End-->

            <!--Accordion 8-->
            <div class="card">
              <div class="card-header p-2" id="headingEight">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Question: What is the next question?
                  </button>
                </h5>
              </div>

              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faqExample">
                <div class="card-body">
                  The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                </div>
              </div>
            </div>
            <!--Accordion 8 End-->

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection