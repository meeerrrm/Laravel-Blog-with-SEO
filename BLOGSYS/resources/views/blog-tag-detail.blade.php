<x-landing-layout>
        <section class="p-8 grid grid-cols-1 content-center" id="header">
            <div class="max-w-6xl mx-auto px-5 text-center">
                <p class="text-xl font-semibold text-slate-300 mt-16">Blog with Tag</p>
                <h1 class="text-7xl font-bold uppercase text-slate-100">{{ $tag }}</h1>
            </div>
            <div class="max-w-6xl mx-auto px-5 pt-24 pb-32">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
@foreach($blogs as $blog)
					<div>
						<a href="{{ route('blog.detail',$blog->uniq) }}" class="h-full w-full">
							<div class="h-full group shadow-lg hover:scale-110  rounded-xl overflow-hidden transition-all">
								<div class="h-44 overflow-hidden bg-slate-700">
									<img src="{{ asset('assets/blog/'.$blog->thumnail) }}" class="h-44 w-auto transition-all object-contain mx-auto" alt="{{ $blog->title }}">
								</div>
								<div class="px-4 py-6">
									<p>
										<span class="text-sky-400 font-thin hover:text-sky-600">{{ json_decode($blog->tag)[0] }}</span>
									</p>
									<h1 class="text-white font-bold text-2xl pt-2">{{ $blog->title }}</h1>
								</div>
							</div>
						</a>
					</div>
@endforeach
                </div>
            </div>
        </section>
</x-landing-layout>