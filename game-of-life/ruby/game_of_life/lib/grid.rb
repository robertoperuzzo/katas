class Grid

  def initialize(args={})
    @rows = 10
    @cols = 10
    @refresh_rate = 1
    @cells = []
    init_all_cells
  end

  attr_accessor :rows, :cols, :refresh_rate, :cells


  private

  def init_all_cells
    (1..rows).each do |row|
      (1..cols).each do |col|
        cells << Cell.new(pos_x: row, pos_y: col)
      end
    end
  end
  
  
end