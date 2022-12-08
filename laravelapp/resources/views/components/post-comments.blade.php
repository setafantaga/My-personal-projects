@props(['comment'])

<link rel="stylesheet" href="review.css">
<div class="comments-box">
    <img src="https://i.pravatar.cc/100?id ={{ $comment->user_id }}" alt="">
    <div class="name"><h3>{{ $comment->author->username}}</h3>
        <p>{{ $comment->created_at }}</p>
        <h4>{{ $comment->body }}</h4>
    </div> 
</div>