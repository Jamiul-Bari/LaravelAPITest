<div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr wire:key='{{ $this->getRandomStr() }}'>
                    <th wire:key='{{ $this->getRandomStr() }}' scope="row">{{ $post->id }}</th>
                    <td wire:key='{{ $this->getRandomStr() }}'>{{ $post->title }}</td>
                    <td wire:key='{{ $this->getRandomStr() }}'>{{ $post->author }}</td>
                    <td wire:key='{{ $this->getRandomStr() }}'>{{ $post->category }}</td>
                    <td wire:key='{{ $this->getRandomStr() }}'>
                        <button wire:key='{{ $this->getRandomStr() }}' wire:click='deletePost({{ $post->id }})'
                            type="button" class="btn btn-dark">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
