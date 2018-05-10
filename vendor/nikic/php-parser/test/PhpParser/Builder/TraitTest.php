               type = "classic",
	                from,
	                to,
	                dx,
	                refX,
	                attr,
	                w = 3,
	                h = 3,
	                t = 5;
	            while (i--) {
	                switch (values[i]) {
	                    case "block":
	                    case "classic":
	                    case "oval":
	                    case "diamond":
	                    case "open":
	                    case "none":
	                        type = values[i];
	                        break;
	                    case "wide": h = 5; break;
	                    case "narrow": h = 2; break;
	                    case "long": w = 5; break;
	                    case "short": w = 2; break;
	                }
	            }
	            if (type == "open") {
	                w += 2;
	                h += 2;
	                t += 2;
	                dx = 1;
	                refX = isEnd ? 4 : 1;
	                attr = {
	                    fill: "none",
	                    stroke: attrs.stroke
	                };
	            } else {
	                refX = dx = w / 2;
	                attr = {
	                    fill: attrs.stroke,
	                    stroke: "none"
	                };
	            }
	            if (o._.arrows) {
	                if (isEnd) {
	                    o._.arrows.endPath && markerCounter[o._.arrows.endPath]--;
	             