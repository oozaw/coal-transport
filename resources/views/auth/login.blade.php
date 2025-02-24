@extends('layout.auth')

@section('content')
   <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm">
      <div class="p-4 sm:p-7">
         <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800">Sign in</h1>
         </div>

         <div class="mt-5">
            <!-- Form -->
            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
               <div class="grid gap-y-4">
                  <!-- Form Group -->
                  <div>
                     <label for="email" class="block text-sm mb-2">Email address</label>
                     <div class="relative">
                        <input type="email" id="email" name="email"
                           class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                           required aria-describedby="email-error" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                           <div class="absolute inset-y-0 end-0 pointer-events-none pe-3 content-center">
                              <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor"
                                 viewBox="0 0 16 16" aria-hidden="true">
                                 <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                              </svg>
                           </div>
                        @endif
                     </div>
                     @if ($errors->has('email'))
                        <p class="text-xs text-red-600 mt-2">{{ $errors->first('email') }}</p>
                     @endif
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div>
                     <div class="flex justify-between items-center">
                        <label for="password" class="block text-sm mb-2">Password</label>
                        {{-- <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                           href="../examples/html/recover-account.html">Forgot password?</a> --}}
                     </div>
                     <div class="relative">
                        <input type="password" id="password" name="password"
                           class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                           required aria-describedby="password-error" value="">
                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                           <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor"
                              viewBox="0 0 16 16" aria-hidden="true">
                              <path
                                 d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                           </svg>
                        </div>
                     </div>
                     <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters required</p>
                  </div>
                  <!-- End Form Group -->

                  <!-- Checkbox -->
                  <div class="flex items-center">
                     <div class="flex">
                        <input id="remember-me" name="remember-me" type="checkbox"
                           class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                     </div>
                     <div class="ms-3">
                        <label for="remember-me" class="text-sm">Remember me</label>
                     </div>
                  </div>
                  <!-- End Checkbox -->

                  <button type="submit"
                     class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign
                     in</button>
               </div>
            </form>
            <!-- End Form -->
         </div>
      </div>
   </div>
@endsection
