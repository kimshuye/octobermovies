<?php namespace Acme\Blog\Models;

use Db;
use Url;
use App;
use Str;
use Html;
use Lang;
use Model;
use Markdown;
use BackendAuth;
use ValidationException;
use RainLab\Blog\Classes\TagProcessor;
use Backend\Models\User;
use Carbon\Carbon;
use Cms\Classes\Page as CmsPage;
use Cms\Classes\Theme;

class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'acme_blog_posts';
    


}