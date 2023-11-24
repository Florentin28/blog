<div>
    <a class="flex flex-col h-full space-y-4 bg-white rounded-md shadow-md p-5 w-full hover:shadow-lg hover:scale-105 transition"
    href="{{ route('articles.show', $article) }}">
    <div class="uppercase font-bold text-gray-800">
        {{ $article->title }}
    </div>
    <div class="flex-grow text-gray-700 text-sm text-justify">
        {{ Str::limit($article->body, 120) }}
    </div>
    <div class="text-xs text-gray-500">
        {{ $article->published_at }}
    </div>
</a></div>


<x-guest-layout>
    <h1 class="font-bold text-xl mb-4">Liste des articles</h1>
    <ul class="grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8">
        @foreach ($articles as $article)
            <li>
                <x-article-card :article="$article"/>
            </li>
        @endforeach
    </ul>

    <div class="mt-8">
        {{ $articles->links() }}
    </div>
</x-guest-layout>

