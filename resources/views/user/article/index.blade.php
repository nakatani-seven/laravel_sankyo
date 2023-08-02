<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="cases__wrapper">
                      @if(isset($articles))
                        <div class="cases__inner border-neutral-400 border-t-2">
                          @foreach($articles as $article) @if($article->status == 1)
                            <article class="cases__article p-3 border-neutral-400 border-b-2">
                              <h2>{{ $article->title }}</h2>
                              <div class="flex">
                                <a class="mr-4" href="">閲覧する</a>
                                <a href="">編集する</a>
                              </div>
                            </article>
                          @endif @endforeach
                        </div>
                      @else
                        <p class="noFind">記事が見つかりませんでした。</p>
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>