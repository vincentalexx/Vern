import React, { useState, useEffect} from "react"
import {Collapse} from "reactstrap"

export default function Collapseable({children, ...props}){
  console.log(props)
    const [title, collapse]  = props
    const [isCollapse, setIsCollapse] = useState(collapse)
    const [icon, setIcon] = useState("fa-solid fa-circle-chevron-down fa-2xl")
    const toggle = () => {
        setIsCollapse(!isCollapse)
        setIcon(state => {
            return state === "fa fa-solid fa-circle-chevron-down fa-2xl"
                ? "fa fa-solid fa-circle-chevron-right fa-2xl"
                : "fa fa-solid fa-circle-chevron-down fa-2xl"
        })

    }

    const animate = collapse => {
        setIsCollapse(collapse)
        setIcon(state => {
            return state === "fa fa-2xlfa-solid fa-circle-chevron-down"
                ? "fa fa-2xlfa-solid fa-circle-chevron-right"
                : "fa fa-2xlfa-solid fa-circle-chevron-down"
        })
    }

    useEffect(() => {
        animate(!collapse)
    }, [collapse])

    return (
        <div className="coll-panel">
          <button
            type="button"
            className="coll-panel-btn btn-primary btn-block text-left"
            onClick={() => toggle()}
          >
            <i className={icon} /> {title}
          </button>
          <Collapse className="" isOpen={isCollapse}>
            {children}
          </Collapse>
        </div>
    );
}

 