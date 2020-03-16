@extends(env('THEME').'.layouts.site')

@section('content')

	<div id="content-home" class="content group">
		 <div class="hentry group">
				                <form id="contact-form-contact-us" class="contact-form" method="post" action="{{ url('/login') }}">
				                	{{ csrf_field() }}
				                    <fieldset>
				                        <ul>
				                            <li class="text-field">
				                                <label for="login">
				                                <span class="label">Name</span>
				                                <br />					<span class="sublabel">This is the name</span><br />
				                                </label>
				                                <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><input type="text" name="login" id="login" class="required" value="" /></div>
													@if ($errors->has('login'))
														<span class="help-block">
															<strong> {{ $errors->first('login')}} </strong>
														</span>

													@endif 
				                            </li>
				                            <li class="text-field">
				                                <label for="password">
				                                <span class="label">Password</span>
				                                <br />					<span class="sublabel">This is a field email</span><br />
				                                </label>
				                                <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="password" id="password" class="required email-validate" value="" /></div>
					                                @if ($errors->has('password'))
															<span class="help-block">
																<strong> {{ $errors->first('password')}} </strong>
															</span>

													@endif
				                            </li>
				                            <li class="submit-button">
				                            	
				                                <input type="submit" name="yit_sendmail" value="Send Message" class="sendmail alignright" />			
				                            </li>
				                        </ul>
				                    </fieldset>
				                </form>
		</div>
	</div>

@endsection