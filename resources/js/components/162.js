import React from "react";
import ReactDOM from "react-dom";
import videojs from "video.js";
import axios from "axios";

class Canal162 extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            stream: false,
            videoJsOptions: null,
        };
    }

    componentDidMount() {
        this.setState(
            {
                stream: true,
                videoJsOptions: {
                    autoplay: true,
                    controls: true,
                    sources: [
                        {
                            src: "http://212.227.239.4:8888/live/cFrctOpTj/index.m3u8",
                            type: "application/x-mpegURL",
                        },
                    ],
                    fluid: true,
                },
            },
            () => {
                this.player = videojs(
                    this.videoNode,
                    this.state.videoJsOptions,
                    function onPlayerReady() {
                        console.log("onPlayerReady", this);
                    }
                );
            }
        );
    }

    componentWillUnmount() {
        if (this.player) {
            this.player.dispose();
        }
    }

    render() {
        return (
            <div className="row">
                <div className="col-xs-12 col-sm-12 col-md-10 col-lg-8 mx-auto mt-5">
                    {this.state.stream ? (
                        <div data-vjs-player>
                            <video
                                ref={(node) => (this.videoNode = node)}
                                className="video-js vjs-big-play-centered"
                            />
                        </div>
                    ) : (
                        " Loading ... "
                    )}
                </div>
            </div>
        );
    }
}

export default Canal162;

if (document.getElementById("video_162")) {
    ReactDOM.render(<Canal162 />, document.getElementById("video_162"));
}
