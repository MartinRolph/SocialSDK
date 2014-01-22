<div role="main">
	<table class="table table-bordered" id="blogsCommentsTable">
		<tr class="label label-info">
			<th><strong>Comment Title</strong></th>
		</tr>
	</table>
</div>	
            <script type="text/javascript">
            require(["sbt/connections/BlogService", "sbt/dom", "sbt/json"],
            	    function(BlogService, dom, json) {
            			var createRow = function(comment) {
            			    var table = dom.byId("blogsCommentsTable");
            			    var tr = document.createElement("tr");
            			    table.appendChild(tr);
            			    var td = document.createElement("td");
            			    dom.setText(td, comment.getTitle());
            			    tr.appendChild(td);
            			};
            		    var blogService = new BlogService(); 
            			blogService.getBlogs({ ps: 1 }).then(
            				function(blogs){
            					return blogService.getBlogComments(blogs[0].getHandle(), { ps: 5 })
            		        }
            			).then(
            		        function(comments){
            		            if (comments.length == 0) {
            		                text = "All blogs posts returned no results.";
            		                dom.setText("content", text);
            		            } else {
            		                for(var j=0; j<comments.length; j++){
            		                    var comment = comments[j];
            		                    createRow(comment);
            		                }
            		            }
            		        },
            		        function(error){
            		            dom.setText("content", "Error code:" +  error.code + ", message:" + error.message);
            		        }       
            			);
            		}
            	);
				</script>            

