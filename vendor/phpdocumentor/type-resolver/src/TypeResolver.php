/* This is a compiled file, you should be editing the file in the templates directory */
.pace {
  -webkit-pointer-events: none;
  pointer-events: none;

  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;

  overflow: hidden;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 2000;
  width: 100%;
  height: 12px;
  background: #fff;
}

.pace-inactive {
  display: none;
}

.pace .pace-progress {
  background-color: #ffffff;
  position: fixed;
  top: 0;
  bottom: 0;
  right: 100%;
  width: 100%;
  overflow: hidden;
}

.pace .pace-activity {
  position: fixed;
  top: 0;
  right: -32px;
  bottom: 0;
  left: 0;

  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);

  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.2)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.2)), color-stop(0.75, rgba(255, 255, 255, 0.2)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
  -webkit-background-size: 32px 32px;
  -moz-background-size: 32px 32px;
  -o-background-size: 32px 32px;
  background-size: 32px 32px;

  -webkit-animation: pace-theme-barber-shop-motion 500ms linear infinite;
  -moz-animation: pace-theme-barber-shop-motion 500ms linear infinite;
  -ms-animation: pace-theme-barber-shop-motion 500ms linear infinite;
  -o-animation: pace-theme-barber-shop-motion 500ms linear infinite;
  animation: pace-theme-barber-shop-motion 500ms linear infinite;
}

@-webkit-keyframes pace-theme-barber-shop-motion {
  0% { -webkit-transform: none; transform: none; }
  100% { -webkit-transform: translate(-32px, 0); transform: translate(-32px, 0); }
}
@-moz-keyframes pace-theme-barber-shop-motion {
  0% { -moz-transform: none; transform: none; }
  100% { -moz-transform: translate(-32px, 0); transform: translate(-32px, 0); }
}
@-o-keyframes pace-theme-barber-shop-motion {
  0% { -o-transform: none; transform: none; }
  100% { -o-transform: translate(-32px, 0); transform: translate(-32px, 0); }
}
@-ms-keyframes pace-theme-barber-shop-motion {
  0% { -ms-transform: none; transform: none; }
  100% { -ms-transform: translate(-32px, 0); transform: translate(-32px, 0); }
}
@keyframes pace-theme-barber-shop-motion {
  0% { transform: none; transform: none; }
  100% { transform: translate(-32px, 0); transform: translate(-32px, 0); }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  describe 'Morris.Grid#setData', ->

  it 'should not alter user-supplied data', ->
    my_data = [{x: 1, y: 1}, {x: 2, y: 2}]
    expected_data = [{x: 1, y: 1}, {x: 2, y: 2}]
    Morris.Line
      element: 'graph'
      data: my_data
      xkey: 'x'
      ykeys: ['y']
      labels: ['dontcare']
    my_data.should.deep.equal expected_data

  describe 'ymin/ymax', ->
    beforeEach ->
      @defaults =
        element: 'graph'
        xkey: 'x'
        ykeys: ['y', 'z']
        labels: ['y', 'z']

    it 'should use a user-specified minimum and maximum value', ->
      line = Morris.Line $.extend @defaults,
        data: [{x: 1, y: 1}]
        ymin: 10
        ymax: 20
      line.ymin.should.equal 10
      line.ymax.should.equal 20

    describe 'auto', ->

      it 'should automatically calculate the minimum and maximum value', ->
        line = Morris.Line $.extend @defaults,
          data: [{x: 1, y: 10}, {x: 2, y: 15}, {x: 3, y: null}, {x: 4}]
          ymin: 'auto'
          ymax: 'auto'
        line.ymin.should.equal 10
        line.ymax.should.equal 15

      it 'should automatically calculate the minimum and maximum value given no y data', ->
        line = Morris.Line $.extend @defaults,
          data: [{x: 1}, {x: 2}, {x: 3}, {x: 4}]
          ymin: 'auto'
          ymax: 'auto'
        line.ymin.should.equal 0
        line.ymax.should.equal 1

    describe 'auto [n]', ->

      it 'should automatically calculate the minimum and maximum value', ->
        line = Morris.Line $.extend @defaults,
          data: [{x: 1, y: 10}, {x: 2, y: 15}, {x: 3, y: null}, {x: 4}]
          ymin: 'auto 11'
          ymax: 'auto 13'
        line.ymin.should.equal 10
        line.ymax.should.equal 15

      it 'should automatically calculate the minimum and maximum value given no data', ->
        line = Morris.Line $.extend @defaults,
          data: [{x: 1}, {x: 2}, {x: 3}, {x: 4}]
          ymin: 'auto 11'
          ymax: 'auto 13'
        line.ymin.should.equal 11
        line.ymax.should.equal 13

      it 'should use a user-specified minimum and maximum value', ->
        line = Morris.Line $.extend @defaults,
          data: [{x: 1, y: 10}, {x: 2, y: 15}, {x: 3, y: null}, {x: 4}]
          ymin: 'auto 5'
          ymax: 'auto 20'
        line.ymin.should.equal 5
        line.ymax.should.equal 20

      it 'should use a user-specified minimum and maximum value given no data', ->
        line = Morris.Line $.extend @defaults,
          data: [{x: 1}, {x: 2}, {x: 3}, {x: 4}]
          ymin: 'auto 5'
          ymax: 'auto 20'
        line.ymin.should.equal 5
        line.ymax.should.equal 20

  describe 'xmin/xmax', ->

    it 'should calculate the horizontal range', ->
      line = Morris.Line
        element: 'graph'
        data: [{x: 2, y: 2}, {x: 1, y: 1}, {x: 4, y: 4}, {x: 3, y: 3}]
        xkey: 'x'
        ykeys: ['y']
        labels: ['y']
      line.xmin.should == 1
      line.xmax.should == 4

    it "should pad the range if there's only one data point", ->
      line = Morris.Line
        element: 'graph'
        data: [{x: 2, y: 2}]
        xkey: 'x'
        ykeys: ['y']
        labels: ['y']
      line.xmin.should == 1
      line.xmax.should == 3

  describe 'sorting', ->

    it 'should sort data when parseTime is true', ->
      line = Morris.Line
        element: 'graph'
        data: [
          {x: '2012 Q1', y: 2},
          {x: '2012 Q3', y: 1},
          {x: '2012 Q4', y: 4},
          {x: '2012 Q2', y: 3}]
        xkey: 'x'
        ykeys: ['y']
        labels: ['y']
      line.data.map((row) -> row.label).should.deep.equal ['2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4']

    it 'should not sort data when parseTime is false', ->
      line = Morris.Line
        element: 'graph'
        data: [{x: 1, y: 2}, {x: 4, y: 1}, {x: 3, y: 4}, {x: 2, y: 3}]
        xkey: 'x'
        ykeys: ['y']
        labels: ['y']
        parseTime: false
      line.data.map((row) -> row.label).should.deep.equal [1, 4, 3, 2]

  describe 'timestamp data', ->

    it 'should generate default labels for timestamp x-values', ->
      d = [
        new Date 2012, 0, 1
        new Date 2012, 0, 2
        new Date 2012, 0, 3
        new Date 2012, 0, 4
      ]
      line = Morris.Line
        element: 'graph'
        data: [
          {x: d[0].getTime(), y: 2},
          {x: d[1].getTime(), y: 1},
          {x: d[2].getTime(), y: 4},
          {x: d[3].getTime(), y: 3}]
        xkey: 'x'
        ykeys: ['y']
        labels: ['y']
      line.data.map((row) -> row.label).should.deep.equal d.map((t) -> t.toString())

    it 'should use a user-supplied formatter for labels', ->
      line = Morris.Line
        element: 'graph'
        data: [
          {x: new Date(2012, 0, 1).getTime(), y: 2},
          {x: new Date(2012, 0, 2).getTime(), y: 1},
          {x: new Date(2012, 0, 3).getTime(), y: 4},
          {x: new Date(2012, 0, 4).getTime(), y: 3}]
        xkey: 'x'
        ykeys: ['y']
        labels: ['y']
        dateFormat: (ts) ->
          date = new Date(ts)
          "#{date.getFullYear()}-#{date.getMonth()+1}-#{date.getDate()}"
      line.data.map((row) -> row.label).should.deep.equal ['2012-1-1', '2012-1-2', '2012-1-3', '2012-1-4']

  it 'should parse