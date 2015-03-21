class HomeController < ApplicationController
  def index
    @posts = Post.where(is_published: true).order('published_at DESC')
  end
end
