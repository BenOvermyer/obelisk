Rails.application.routes.draw do
  resources :posts
  resources :users
  get "/log-in" => "sessions#new"
  post "/log-in" => "sessions#create"
  get "/log-out" => "sessions#destroy", as: :log_out
  root 'home#index'
end
