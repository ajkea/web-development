@extends ('layouts.app')

@section('pageTitle', 'FAQ')
@section('content')
    @include ('layouts.hero')
    <div class="container">
        <a href="#" class="breadcrumbs">
            Home > Frequently Asked Questions
        </a>
        <div class="row">
            <h1>Find what you're looking for?</h1>
        </div>
        <div class="row faq-questions">
            @foreach($questions as $question)
                <div class="col-6 faq-question">
                    <a href="#question{{ $question->id }}">{{ $question->question }}</a>
                </div>
            @endforeach
        </div>
            <table class="table">
                <tbody>
                @foreach($questions as $question)
                    <tr class="question-list--row">
                        <th class="question-list--row__large" scope="row">Q</th>
                        <th class="question-list--row__question" scope="row">{{ $question->question }}</th>
                    </tr>
                    <tr class="question-list--row">
                        <td class="question-list--row__large">A</td>
                        <td class="question-list--row__answer">{{ $question->answer }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection