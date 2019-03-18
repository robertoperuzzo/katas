class Cell

  def initialize(args={})
    @pos_x = args.fetch(:pos_x)
    @pos_y = args.fetch(:pos_y)
    @alive = args.fetch(:alive, false)
    @close_cells_count = nil
  end
  
  attr_accessor :pos_x, :pos_y, :alive, :close_cells_count


end