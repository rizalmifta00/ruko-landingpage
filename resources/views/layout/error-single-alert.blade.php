@if ($errors->has($name))
<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-0"></i> {{ $errors->first($name) }}</span>
@endif
