<x-unauthorized-layout>
    <div class="content flex flex-col gap-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="header flex justify-between items-center">
            <h3 class="text-3xl logo font-bold">All books</h3>
            <a href="{{ route('books.create') }}">
                <button class="p-4 bg-green-700 text-white hover:bg-green-800">
                    Add Books
                </button>
            </a>
        </div>

        <div class="overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200 shadow-md bg-white">
                <thead class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
                    <tr>
                        <th class="px-4 py-3">Cover</th>
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">Author</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Lang</th>
                        <th class="px-4 py-3">Publisher</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">ISBN</th>
                        <th class="px-4 py-3">Options</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                    @foreach ($books as $book)
                        <tr class="hover:bg-gray-50 transition duration-200 ease-in-out">
                            <td class="px-4 py-2">
                                <img src="{{ asset('storage/covers/' . $book->cover_image) }}" alt="cover"
                                    class="h-16 w-12 object-cover shadow-sm" />
                            </td>
                            <td class="px-4 py-2 font-medium">{{ $book->book_title }}</td>
                            <td class="px-4 py-2">{{ $book->author }}</td>
                            <td class="px-4 py-2">{{ $book->category }}</td>
                            <td class="px-4 py-2">{{ $book->lang }}</td>
                            <td class="px-4 py-2">{{ $book->publisher }}</td>
                            <td class="px-4 py-2">{{ $book->pub_date }}</td>
                            <td class="px-4 py-2">{{ $book->ISBN }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('books.edit', $book->id) }}"><button><x-heroicon-o-pencil-square
                                            class="w-6 h-6" /></button></a>
                                <form action="{{ route('books.delete', $book->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this book?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">
                                        <x-heroicon-o-trash class="w-6 h-6" />
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-unauthorized-layout>
