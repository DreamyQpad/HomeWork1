<x-layout>

    <div class="container homeContainer">
        <div class="row">
            <div class="col text-center">
                <div class="homeVideos">
                    <h2>YouTube Video</h2>
                    <div>
                        <iframe src="https://www.youtube-nocookie.com/embed/rIfdg_Ot-LI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <h2>Local Video</h2>
                <video controls>
                    <source src="/video/video.mp4" type="video/mp4">
                    <source src="/video/video.mp4" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mapContainer">
                <h2>Contact Us</h2>
                <div id="map"></div>
            </div>
        </div>
    </div>

</x-layout>
