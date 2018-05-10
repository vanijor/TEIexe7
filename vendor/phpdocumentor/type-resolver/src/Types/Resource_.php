            }
                    _.dirtyT = 1;
                    el.matrix = m;
                }
            }

            /*\
             * Element.matrix
             [ property (object) ]
             **
             * Keeps @Matrix object, which represents element transformation
            \*/
            el.matrix = m;

            _.sx = sx;
            _.sy = sy;
            _.deg = deg;
            _.dx = dx = m.e;
            _.dy = dy = m.f;

            if (sx == 1 && sy == 1 && !deg && _.bbox) {
                _.bbox.x += +dx;
                _.bbox.y += +dy;
            } else {
                _.dirtyT = 1;
            }
        },
        getEmpty = function (item) {
            var l = 