<x-unauthorized-layout>
    <div class="form flex flex-col w-[600px] bg-gray bg-white p-10 gap-6">
        <h4 class="sulphur text-2xl font-black">Add book</h4>
        <form action="{{ route('books.store') }}" method="post" class="flex flex-col gap-4" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
                <label for="book_title">Title</label>
                <input type="text" name="book_title" class="bg-gray-200 border-none" value="{{ old('book_title') }}"
                    required>
                @error('book_title')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="author">Author</label>
                <input type="text" name="author" class="bg-gray-200 border-none" value="{{ old('author') }}"
                    required>
                @error('author')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="category">Category</label>
                <input type="text" name="category" value="{{ old('category') }}" class="bg-gray-200 border-none"
                    required>
                @error('category')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="lang">Language</label>
                <input type="text" name="lang" class="bg-gray-200 border-none" value="{{ old('lang') }}"
                    required>
                @error('lang')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="publisher">Publisher</label>
                <input type="text" name="publisher" value="{{ old('lang') }}" class="bg-gray-200 border-none"
                    required>
                @error('publisher')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="pub_date">Publishion Date</label>
                <input type="date" name="pub_date" value="{{ old('pub_date') }}" class="bg-gray-200 border-none"
                    required>
                @error('pub_date')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="ISBN">ISBN</label>
                <input type="text" name="ISBN" value="{{ old('ISBN') }}" class="bg-gray-200 border-none"
                    required>
                @error('ISBN')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="cover_image">Cover Image</label>
                <input type="file" name="cover_image" accept='image/*' class="bg-gray-200 border-none">
                @error('cover_image')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <input type="submit" value="Add Book" class="p-2 bg-green-700 text-white">
        </form>
    </div>
</x-unauthorized-layout>
