<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Url Shortener</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <<link rel="stylesheet" type="text/css" href="css/default.css">


        
    </head>
    <body>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Shorten a Url</h1>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success">
                            {!! session('status') !!}

                        </div>
                    @endif



                    {{ Form::open(array('url' => 'make')) }}

                    {{ Form::url('url', 'Enter a url', ['class' => 'form-control url']) }}

                    {{ Form::submit('Shorten', array('class' => 'btn btn-md btn-float')) }}

                    {{ Form::close() }}

            </div>
        </div>
    </body>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
