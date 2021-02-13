<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

        <form class="review-form" wire:submit.prevent = "store">
            @csrf
            <div class="form-group">
                    <input class="input" wire:model="subject" type="text" placeholder="Subject" />
                    @error('subject') <span class="text-danger"> {{ $message }} </span>@enderror
            </div>

            <div class="form-group">
                <textarea class="input" wire:model="review" placeholder="Write your review here"></textarea>
                @error('review') <span class="text-danger"> {{ $message }} </span>@enderror
            </div>

            @auth
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" value="Save Review" class="btn btn-primary">
                </div>
            </div>
            @elseauth
                <a href="/login" class="btn-primary"> You need to login to submit the review </a>
            @endauth
        </form>
</div>

