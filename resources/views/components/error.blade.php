@if ($errors->any())
        <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
@elseif(session('succes'))

<div class="alert alert-sucess">
    {{ session('succes') }}
</div>

@endif
