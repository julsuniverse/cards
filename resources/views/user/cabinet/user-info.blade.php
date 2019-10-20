<form method="post" action="{{ route('cabinet.edit', ['user' => $user]) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">{{ __('cabinet.info-name') }}</label>
        <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" id="name" name="name"
               placeholder="{{ __('cabinet.info-name-placeholder') }}" value="{{ old('name', $user->name) }}">
        <small id="emailHelp" class="form-text text-muted">{{ __('cabinet.info-name-help') }}</small>
        @if ($errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="email" name="email"
               aria-describedby="emailHelp" placeholder="{{ __('cabinet.info-email-placeholder') }}" value="{{ old('email', $user->email) }}">
        <small id="emailHelp" class="form-text text-muted">{{ __('cabinet.info-email-help') }}</small>
        @if ($errors->has('email'))
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
            </div>
        @endif
    </div>

    <div class="form-group">
        <label for="date">{{ __('cabinet.info-date') }}</label>
        <input type="date" class="form-control @if ($errors->has('date')) is-invalid @endif" id="date" name="date"
               placeholder="{{ __('cabinet.info-date-placeholder') }}" value="{{ old('date', $user->dob) }}">
        <small id="dateHelp" class="form-text text-muted">{{ __('cabinet.info-date-help') }}</small>
        @if ($errors->has('date'))
            <div class="invalid-feedback">
                {{ $errors->first('date') }}
            </div>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">{{ __('cabinet.submit') }}</button>
</form>