@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>@lang('messages.feedback')</h1>
            </div>
        </div>
    </div>
    <section class="contacts-information__section" id="feedback">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <ul class="contacts__ul">
                        <li><h4>Emails:</h4></li>
                        @foreach($data['contacts']['emails'] as $email)
                            <li>
                                {{ $email->value }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4">
                    <ul class="contacts__ul">
                        <li>
                            <h4>@lang('messages.share'):</h4>
                        </li>
                        @foreach($data['contacts']['social']['share'] as $soc)
                            <a href="{{ $soc->link }}" class="no_underline" target="_blank">
                                <i class="{{ $soc->icon." ".$soc->color }} contacts_ico"></i>
                            </a>
                        @endforeach
                    </ul>
                    <ul class="contacts__ul">
                        <li>
                            <h4>@lang('messages.we_in_social_networks'):</h4>
                        </li>
                        @foreach($data['contacts']['social']['links'] as $soc)
                            @if($soc->is_active == 0)
                                @continue
                            @endif
                            <a href="{{ $soc->link }}" class="no_underline" target="_blank">
                                <i class="{{ $soc->icon}} contacts_ico"></i>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback__section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>@lang('messages.feedback')</h1>
                </div>
            </div>
            <div class="row">
                <form action="{{ route('create-feedback') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group @if( is_error('name') )has-error @endif col-xs-12 col-md-6">
                        <label for="name">@lang('messages.name')</label>
                        <input type="text" class="form-control btn-flat input-lg" name="name" id="name" placeholder="@lang('messages.your_name')">
                        @if( is_error('name') )
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group @if( is_error('email') )has-error @endif col-xs-12 col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control btn-flat input-lg" name="email" id="email"
                               placeholder="email@example.com">
                        @if( is_error('email') )
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group @if( is_error('question') )has-error @endif col-xs-12">
                        <label for="question">@lang('messages.question')</label>
                        <textarea name="question" id="question" class="form-control contacts__textarea btn-flat" rows="15"></textarea>
                        @if( is_error('question') )
                            <span class="help-block">{{ $errors->first('question') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-flat btn-main-carousel btn-lg">@lang('messages.send')</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@section('js')
    <script>
        $(function () {
            $('html, body').hide();

            if (window.location.hash) {
                setTimeout(function() {
                    $('html, body').scrollTop(0).show();
                    $('html, body').animate({
                        scrollTop: $(window.location.hash).offset().top + 200
                    }, 1000)
                }, 0);
            }
            else {
                $('html, body').show();
            }
        });
    </script>
@stop

