class AddPublishedAtToPosts < ActiveRecord::Migration
  def change
    add_column :posts, :published_at, :datetime
    add_index :posts, :published_at
    add_column :posts, :is_published, :boolean, :default => false
  end
end
