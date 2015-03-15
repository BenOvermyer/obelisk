class Post < ActiveRecord::Base
  validates :title, presence: true, length: { minimum: 7 }

  before_save :check_publish

  def check_publish
    if self.is_published and self.published_at.nil?
      self.published_at = Time.zone.now
    end

    if !self.is_published and !self.published_at.nil?
      self.published_at = nil
    end
  end
end
