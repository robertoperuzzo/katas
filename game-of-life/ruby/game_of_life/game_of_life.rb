#!/usr/bin/env ruby

Dir[ File.dirname(__FILE__) + "/lib/*.rb" ].each {|file| require file }




g = Grid.new