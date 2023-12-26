import React from "react";
import ReactDOM from "react-dom";
import videojs from "video.js";
import axios from "axios";

class Radio extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            stream: false,
            videoJsOptions: null,
            canales: "Puebla",
        };
    }

    componentDidMount() {
        if (this.state.canales == "Puebla") {
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
    }

    componentWillUnmount() {
        if (this.player) {
            this.player.dispose();
        }
    }

    CambiarCanal(canal) {
        if (canal == "Puebla") {
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
        } else if (canal == "Acatlan") {
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
        } else if (canal == "Huauchinango") {
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
        } else if (canal == "Libres") {
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
        } else if (canal == "Izucar") {
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
        } else if (canal == "Tehuacan") {
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
        } else if (canal == "Teziutlan") {
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
        } else if (canal == "Zacatlan") {
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
    }

    render() {
        return (
            <div className="row">
                <div className="col-md-4 mx-auto">
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
                <div className="col-md-4 mx-auto">
                    <div className="row">
                        <div className="col-md-4">
                            <img
                                onClick={() => this.CambiarCanal("Puebla")}
                                src={
                                    APP_URL +
                                    "/images/radio/canales/puebla-100x100.png"
                                }
                                className="img-fluid mx-auto d-block mb-3 "
                            />
                        </div>
                        <div className="col-md-4">
                            <img
                                src={
                                    APP_URL +
                                    "/images/radio/canales/ACATLAN-100x100.png"
                                }
                                className="img-fluid mx-auto d-block mb-3"
                            />
                        </div>
                        <div className="col-md-4">
                            <img
                                src={
                                    APP_URL +
                                    "/images/radio/canales/HUAUCHINANGO-100x100.png"
                                }
                                className="img-fluid mx-auto d-block mb-3"
                            />
                        </div>
                        <div className="col-md-4">
                            <img
                                src={
                                    APP_URL +
                                    "/images/radio/canales/LIBRES-100x100.png"
                                }
                                className="img-fluid mx-auto d-block mb-3"
                            />
                        </div>
                        <div className="col-md-4">
                            <img
                                src={
                                    APP_URL +
                                    "/images/radio/canales/IZUCAR-100x100.png"
                                }
                                className="img-fluid mx-auto d-block mb-3"
                            />
                        </div>
                        <div className="col-md-4">
                            <img
                                src={
                                    APP_URL +
                                    "/images/radio/canales/TEHUACAN-100x100.png"
                                }
                                className="img-fluid mx-auto d-block mb-3"
                            />
                        </div>
                        <div className="col-md-4">
                            <img
                                src={
                                    APP_URL +
                                    "/images/radio/canales/TEZIUTLAN-100x100.png"
                                }
                                className="img-fluid mx-auto d-block mb-3"
                            />
                        </div>
                        <div className="col-md-4">
                            <img
                                src={
                                    APP_URL +
                                    "/images/radio/canales/ZACATLAN-100x100.png"
                                }
                                className="img-fluid mx-auto d-block mb-3"
                            />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Radio;

if (document.getElementById("en_vivo")) {
    ReactDOM.render(<Radio />, document.getElementById("en_vivo"));
}
