<div class="w-full max-w-xs mx-auto pt-4">

	<div class="py-5">
        	<img src="{{ asset('storage/scene.png') }}" alt="Scene logo">
	</div>

	<form wire:submit.prevent="loginUser" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
		<div class="mb-4">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="username">
				Email
			</label>
			<input wire:model.debounce="email" autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text">
			@error('email') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
		</div>

		<div class="mb-6">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="password">
				Password
			</label>
			<input wire:model.lazy="password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password">
			@error('password') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
		</div>

		<div class="flex items-center justify-between">
			<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
				Sign In
			</button>
			<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
				Forgot Password?
			</a>
		</div>
	</form>

	<p class="text-center text-gray-500 text-xs">
		Statistical Cluster - Externsive Narrative Evaluation.<br> &copy;2020 <a href="https://terze.org">Terze</a>. All rights reserved.
	</p>

</div>