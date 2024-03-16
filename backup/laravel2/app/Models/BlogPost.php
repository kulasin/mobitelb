<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = ['title', 'content', 'published_at'];

    // Add any additional columns for your blog posts here

    // Define any relationships related to the BlogPost model if needed
}

