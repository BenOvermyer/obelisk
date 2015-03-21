class PostsController < ApplicationController
  before_filter :require_login, :only => [:new, :create, :edit, :index, :update, :destroy]

  def new
    @post = Post.new

    @page_title = 'New Post'
  end

  def create
    @post = Post.new(post_params)

    if @post.save
      redirect_to @post
    else
      render 'new'
    end
  end

  def destroy
    @post = Post.find(params[:id])
    @post.destroy

    redirect_to posts_path
  end

  def edit
    @post = Post.find(params[:id])

    @page_title = 'Edit Post'
  end

  def index
    @posts = Post.all

    @page_title = 'Posts'
  end

  def show
    @post = Post.friendly.find(params[:id])

    @page_title = @post.title
  end

  def update
    @post = Post.find(params[:id])

    if @post.update(post_params)
      redirect_to @post
    else
      render 'edit'
    end
  end

  private
    def post_params
      params.require(:post).permit(:title, :summary, :body, :is_published)
    end

    def require_login
      redirect_to root_path, notice: 'Only logged-in users can do that.' unless current_user
    end
end
