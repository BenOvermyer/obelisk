class AddSlugToPosts < ActiveRecord::Migration
  def change
    add_column :posts, :slug, :string
    add_index :posts, :slug, { :unique => true }
    Post.reset_column_information
    Post.find_each(&:save)
  end
end
