@include('layout.header');

<div class="no-bottom no-top" id="content">
    <div id="top"></div>



    <section class="blog-section">
        <div class="container">
            <div class="row">
                <!-- Blog Content -->
                <div class="col-md-8 blog-content">
                    <img src="https://via.placeholder.com/800x400" alt="Blog Image">
                    <h2>Blog Post Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur interdum sapien, at dapibus orci viverra quis. Proin vel leo at odio dapibus bibendum in sed arcu. Praesent vel pharetra leo, ac viverra velit.</p>
                    
                    <!-- Collapsible Content -->
                    <div class="collapse" id="readMoreContent">
                        <p>Curabitur ultricies risus eu diam commodo, sit amet egestas sapien varius. Fusce condimentum, est in tristique volutpat, orci orci feugiat ex, at varius enim eros ut lorem. Donec consectetur bibendum justo ac consectetur.</p>
                        <p>Aenean vitae libero sem. Suspendisse interdum magna quis metus malesuada, sit amet dictum ipsum fringilla. Duis a orci ullamcorper, finibus elit ac, consequat felis. Etiam at augue at est suscipit eleifend.</p>
                    </div>
    
                    <a class="btn-custom" data-bs-toggle="collapse" href="#readMoreContent" role="button" aria-expanded="false" aria-controls="readMoreContent">
                        Read More
                    </a>
                </div>
                
                <!-- Sidebar: Recent Posts & Extras -->
                <div class="col-md-4 recent-posts">
                    <h4>Recent Posts</h4>
                    <div class="recent-post-item">
                        <img src="https://via.placeholder.com/100" alt="Post Image">
                        <div>
                            <a href="#">Post Title 1</a>
                            <p class="small text-muted">Aug 28, 2024</p>
                        </div>
                    </div>
                    <div class="recent-post-item">
                        <img src="https://via.placeholder.com/100" alt="Post Image">
                        <div>
                            <a href="#">Post Title 2</a>
                            <p class="small text-muted">Aug 25, 2024</p>
                        </div>
                    </div>
                    <div class="recent-post-item">
                        <img src="https://via.placeholder.com/100" alt="Post Image">
                        <div>
                            <a href="#">Post Title 3</a>
                            <p class="small text-muted">Aug 22, 2024</p>
                        </div>
                    </div>
                    <!-- Add more recent posts as needed -->
                </div>
            </div>
        </div>
    </section>





</div>
@include('layout.footer')